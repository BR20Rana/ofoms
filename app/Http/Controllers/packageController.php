<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Package; // Update the use statement to reflect the correct namespace

class PackageController extends Controller


{
    public function packagelist()
    {
        $packagedata = Package::all(); // Assuming you want to pass package data to the addpackage view
        return view('admin.pages.package.addpackage', compact('packagedata'));
    }

    public function package()
    {
        $packagedata = Package::all();
        return view('admin.pages.package.packagelist', compact('packagedata'));
    }

    public function delete($id)
    {
        $package = Package::find($id);
        if ($package) {
            $package->delete();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.pages.package.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        if ($package) {
            $fileName = $package->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/food/image', $fileName);
            }

            $package->update([
                'food_name' => $request->food_name,
                'food_type' => $request->food_type,
                'image' => $fileName,
                'food_price' => $request->food_price,
            ]);
        }

        return redirect()->route('package');
    }

    public function storePackage(Request $request)
    {
        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/food/image', $fileName);
        }

        Package::create([
            'food_name' => $request->food_name,
            'food_type' => $request->food_type,
            'image' => $fileName,
            'food_price' => $request->food_price,
        ]);

        return redirect(route('package'));
    }
}
