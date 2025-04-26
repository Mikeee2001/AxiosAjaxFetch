<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()
    {
        try {
            $products = Product::all(); // Fetch all products
            return response()->json([
                'status' => 'success',
                'message' => 'Products fetched successfully',
                'data' => $products, // Ensure data is an array
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch products',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'product_name' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'product_description' => 'nullable|string',
                'product_price' => 'required|numeric',
                'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->file('product_image')) {
                $imagePath = $request->file('product_image')->store('images', 'public');
            }

            $product = Product::create([
                'product_name' => $request->product_name,
                'category' => $request->category,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_image' => $imagePath,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Product created successfully',
                'data' => $product
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create product',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function updateProduct(Request $request, $id)
    {
        try {
            // Validate the incoming request
            $request->validate([
                'product_name' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'product_description' => 'nullable|string',
                'product_price' => 'required|numeric',
            ]);

            // Find the product or throw a 404 error
            $product = Product::findOrFail($id);

            // Update only the product details, excluding the image
            $product->update($request->only(['product_name', 'category', 'product_description', 'product_price']));

            // Fetch updated data
            $updatedProduct = Product::find($id);

            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully',
                'data' => $updatedProduct, // Return updated data explicitly
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update product',
                'error' => $e->getMessage(),
            ], 500);
        }
    }




        public function createProduct(Request $request)
        {
            try {
                $product_image_rule = 'required|image|mimes:jpeg,png,jpg,gif|max:5120'; // Allow up to 5 MB

                $request->validate([
                    'product_name' => 'required|string|max:255',
                    'category' => 'required|string|max:255',
                    'product_description' => 'nullable|string',
                    'product_price' => 'required|numeric',
                    'product_image' => $product_image_rule,
                ]);


                if ($request->hasFile('product_image')) {
                    $imagePath = $request->file('product_image')->store('images', 'public');
                } else {
                    throw new \Exception('Image upload failed.');
                }

                $product = Product::create([
                    'product_name' => $request->product_name,
                    'category' => $request->category,
                    'product_description' => $request->product_description,
                    'product_price' => $request->product_price,
                    'product_image' => $imagePath,
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Product created successfully',
                    'data' => $product,
                ], 201);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to create product',
                    'error' => $e->getMessage(),
                ], 500);
            }
        }

        public function showProduct($id)
        {
            try {
                $product = Product::findOrFail($id); // Find the product by ID or throw an exception
                return response()->json([
                    'status' => 'success',
                    'message' => 'Product retrieved successfully',
                    'data' => $product,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found',
                    'error' => $e->getMessage(),
                ], 404);
            }
        }
        public function deleteProduct($id)
        {
            try {
                $product = Product::findOrFail($id);
                $product->delete();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Product has been deleted successfully'
                ], 200);
            } catch (\Exception $e) {

                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to delete the product'
                ], 500);
            }
        }

        public function fetchProducts(Request $request) {
            $query = Product::query();
            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where('product_name', 'like', "%$search%")
                      ->orWhere('category', 'like', "%$search%")
                      ->orWhere('product_description', 'like', "%$search%");
            }
            $products = $query->get();
            return response()->json(['data' => $products]);
        }



}
