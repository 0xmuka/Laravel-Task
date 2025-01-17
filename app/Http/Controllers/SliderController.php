<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('sliders.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required|image',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $data = $request->all();
        $data['image'] = $request->file('image')->store('sliders', 'public');

        Slider::create($data);
        return redirect()->route('sliders.index')->with('success', 'Slider added successfully.');
    }


    public function edit(Slider $slider)
    {
        $categories = Category::all();
        return view('sliders.edit', compact('slider', 'categories'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        $slider->update($data);
        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }


    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully!');
    }

}
