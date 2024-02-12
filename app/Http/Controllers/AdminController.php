<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function connect()
    {
        $firebase = (new Factory)
            ->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')))
            ->withDatabaseUri(env('FIREBASE_DATABASE_URL'));

        return $firebase->createDatabase();
    }

    public function view_product()
    {
        // Mendapatkan data kategori dari Firebase
        $categories = $this->connect()->getReference('categories')->getValue();

        return view('admin.produk.product', compact('categories'));
    }


    public function add_product(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori' => 'required', // Validasi kategori
        ]);

        // Proses unggah gambar
        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Mendapatkan nama kategori yang dipilih
        $selectedCategory = $request->kategori;

        // Tambahkan data produk ke Firebase dan dapatkan ID yang dihasilkan oleh Firebase
        $data = $request->except(['_token', 'gambar', 'kategori']);
        $data['gambar'] = $imageName;
        $data['kategori'] = $selectedCategory; // Menambahkan nama kategori ke data produk

        // Tambahkan data ke Firebase dan dapatkan ID yang dihasilkan oleh Firebase
        $newProductRef = $this->connect()->getReference('product')->push($data);
        $newProductId = $newProductRef->getKey();

        // Set ID yang dihasilkan oleh Firebase ke dalam data produk
        $this->connect()->getReference('product')->getChild($newProductId)->update(['id' => $newProductId]);

        return redirect('showProduct');
    }


    public function showProduct()
    {
        $products = $this->connect()->getReference('product')->getSnapshot()->getValue();

        // Paginate the data
        $perPage = 3;
        $currentPage = request()->input('page', 1);
        $pagedData = array_slice($products, ($currentPage - 1) * $perPage, $perPage);

        // Create a Collection instance
        $productsCollection = new Collection($pagedData);

        // Create an instance of LengthAwarePaginator
        $productsPaginated = new LengthAwarePaginator(
            $productsCollection,
            count($products),
            $perPage,
            $currentPage
        );

        // Set the path manually because it won't be correct when using custom pagination
        $productsPaginated->setPath(url('showProduct'));

        return view('admin.produk.showProduct')->with(['product' => $productsPaginated]);
    }


    public function edit($id)
    {
        $categories = $this->connect()->getReference('categories')->getValue();
        $product = $this->connect()->getReference('product/' . $id)->getValue();
        return view('admin.produk.editProduct', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mendapatkan data produk berdasarkan ID
        $product = $this->connect()->getReference('product')->getChild($id)->getValue();

        // Memeriksa apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Menghapus file gambar lama dari folder
            $oldImagePath = public_path('images/' . $product['gambar']);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Mengunggah file gambar baru
            $imageName = time() . '.' . $request->file('gambar')->extension();
            $request->file('gambar')->move(public_path('images'), $imageName);

            // Memperbarui data produk dengan gambar yang baru
            $productData = $request->except(['_token', '_method']);
            $productData['gambar'] = $imageName;
            $this->connect()->getReference('product/' . $id)->update($productData);
        } else {
            // Jika tidak ada gambar yang diunggah, perbarui data produk tanpa gambar
            $productData = $request->except(['_token', '_method', 'gambar']);
            $this->connect()->getReference('product/' . $id)->update($productData);
        }

        return redirect('showProduct');
    }


    public function deleteProduct($id)
    {
        // Mendapatkan data produk berdasarkan ID
        $product = $this->connect()->getReference('product')->getChild($id)->getValue();

        // Mendapatkan nama file gambar
        $imageName = $product['gambar'];

        // Hapus file gambar dari folder
        $imagePath = public_path('images/' . $imageName);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Hapus data produk dari Firebase
        $this->connect()->getReference('product')->getChild($id)->remove();

        return redirect()->back();
    }


    //BAGIAN KATEGORI

    public function view_category()
    {
        $categories = $this->connect()->getReference('categories')->getValue();

        // Pastikan $categories adalah array
        $categories = isset($categories) ? $categories : [];
        return view('admin.kategori.catagory', compact('categories'));
    }

    public function add_category(Request $request)
    {
        // Validasi data kategori
        $this->validate($request, [
            'category' => 'required|string|max:255',
        ]);

        // Simpan data kategori ke Firebase dan dapatkan ID yang dihasilkan oleh Firebase
        $newCategoryRef = $this->connect()->getReference('categories')->push([
            'category' => $request->input('category'),
        ]);
        $newCategoryId = $newCategoryRef->getKey();

        // Set ID yang dihasilkan oleh Firebase ke dalam data kategori
        $this->connect()->getReference('categories')->getChild($newCategoryId)->update(['id' => $newCategoryId]);

        return redirect()->route('categories')->with('success', 'Category added successfully');
    }



    public function editCategory($id)
    {
        $category = $this->connect()->getReference('categories/' . $id)->getValue();
        return view('admin.kategori.editKategori', compact('category'));
    }

    public function updateKategori(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required|string|max:255',
        ]);

        $categoryData = $request->except(['_token', '_method']);


        // Perbarui data produk ke database
        $this->connect()->getReference('categories/' . $id)->update($categoryData);

        return redirect('view_category');
    }

    public function deleteKategori($id)
    {
        // Hapus data produk berdasarkan ID
        $this->connect()->getReference('categories/' . $id)->remove();

        // Redirect ke tampilan produk setelah penghapusan
        return redirect('view_category')->with('success', 'Produk berhasil dihapus.');
    }
}
