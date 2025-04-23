<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
  // Mostrar vista principal con 6 blogs aleatorios
  public function mainBlogView()
  {
    $blogs = Blog::orderBy('published_at', 'desc')->take(6)->get();
    return view('enlimonado.pages.blog.index', compact('blogs'));
  }


  // Vista administrativa con DataTable
  public function index()
  {
    $blogs = Blog::orderBy('published_at', 'desc')->get();
    return view('enlimonado.admin.blog.index', compact('blogs'));
  }


  // Guardar nuevo blog
  public function store(Request $request)
  {
    // Validaciones de los campos del formulario
    $request->validate([
      'title' => 'required|string|max:255',
      'excerpt' => 'required|string',
      'content' => 'required|string',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación de la imagen con tipos y tamaño
      'author' => 'required|string|max:255',
      'published_at' => 'required|date',
    ]);

    // Crear el blog antes de guardar la imagen, porque necesitamos el ID para la imagen
    $blog = new Blog([
      'title' => $request->title,
      'excerpt' => $request->excerpt,
      'content' => $request->content,
      'author' => $request->author,
      'published_at' => $request->published_at,
    ]);

    // Subir la imagen si existe
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      $image = $request->file('image');
      $imageExtension = $image->getClientOriginalExtension(); // Obtener la extensión del archivo

      // Generar un nombre único para la imagen usando el ID del blog y un timestamp
      $imageName = $blog->id . '-' . time() . '.' . $imageExtension;

      // Guardar la imagen en el directorio adecuado
      $imagePath = Storage::disk('public')->put('assets/img/enlimonado/blog/' . $imageName, file_get_contents($image));

      // Verificar que la imagen se haya guardado correctamente
      if ($imagePath) {
        $blog->image = '/storage/assets/img/enlimonado/blog/' . $imageName;
      } else {
        return redirect()->back()->with('error', 'Ocurrió un error al guardar la imagen.');
      }
    }

    // Guardar el blog en la base de datos, incluyendo la imagen si existe
    $blog->save();

    return redirect()->route('blogs.index')->with('success', 'Blog creado exitosamente.');
  }

  // Formulario de edición
  public function edit($id)
  {
    $blog = Blog::findOrFail($id);
    return view('blogs.edit', compact('blog'));
  }

  // Actualizar blog
  public function update(Request $request, $id)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'excerpt' => 'required|string',
      'content' => 'required|string',
      'image' => 'nullable|image|max:2048',
      'author' => 'required|string|max:255',
      'published_at' => 'required|date',
    ]);

    $blog = Blog::findOrFail($id);

    // Reemplazar imagen si se sube una nueva
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      if (!empty($blog->image) && Storage::disk('public')->exists($blog->image)) {
        Storage::disk('public')->delete($blog->image);
      }

      $blog->image = $request->file('image')->store('assets/img/enlimonado/blog', 'public');
    }


    $blog->update([
      'title' => $request->title,
      'excerpt' => $request->excerpt,
      'content' => $request->content,
      'author' => $request->author,
      'published_at' => $request->published_at,
    ]);

    return redirect()->route('blogs.index')->with('success', 'Blog actualizado correctamente.');
  }


  // Eliminar blog
  public function destroy($id)
  {
    $blog = Blog::findOrFail($id);

    if ($blog->image) {
      Storage::disk('public')->delete($blog->image);
    }

    $blog->delete();

    return redirect()->route('blogs.index')->with('success', 'Blog eliminado.');
  }

  // Mostrar blog individual
  public function showBlog($id)
  {
    $blog = Blog::findOrFail($id);
    return view('enlimonado.pages.blog.show', compact('blog'));
  }

  // Buscar blogs por título o autor
  public function search(Request $request)
  {
    $query = $request->input('q');

    $blogs = Blog::where('title', 'like', "%$query%")
      ->orWhere('author', 'like', "%$query%")
      ->get();

    return view('blogs.search', compact('blogs', 'query'));
  }
}
