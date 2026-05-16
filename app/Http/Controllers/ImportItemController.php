<?php

namespace App\Http\Controllers;

use App\Models\ImportItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportItemController extends Controller
{
    public function index()
    {
        $items = ImportItem::where('is_active', true)->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'item_name' => 'required',
            'category' => 'required',
            'supplier' => 'required',
            'quantity' => 'required|integer',
            'import_price' => 'required',
            'import_date' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        ImportItem::create($data);

        return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = ImportItem::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ImportItem::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        $item->update($data);

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = ImportItem::findOrFail($id);
        $item->update(['is_active' => false]);

        return redirect()->route('items.index');
    }
}