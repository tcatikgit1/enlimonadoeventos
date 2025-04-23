<div class="row g-3">
  <div class="col-md-6">
    <label for="title" class="form-label">Título</label>
    <input type="text" name="title" class="form-control" required>
  </div>
  <div class="col-md-6">
    <label for="author" class="form-label">Autor</label>
    <input type="text" name="author" class="form-control" required>
  </div>
  <div class="col-md-12">
    <label for="excerpt" class="form-label">Extracto</label>
    <textarea name="excerpt" class="form-control" rows="2" required></textarea>
  </div>
  <div class="col-md-12">
    <label for="content" class="form-label">Contenido</label>
    <textarea name="content" class="form-control" rows="5" required></textarea>
  </div>
  <div class="col-md-6">
    <label for="published_at" class="form-label">Fecha de publicación</label>
    <input type="date" name="published_at" class="form-control" required>
  </div>
  <div class="col-md-6">
    <label for="image" class="form-label">Imagen destacada</label>
    <input type="file" name="image" class="form-control" accept="image/*">
  </div>
</div>
