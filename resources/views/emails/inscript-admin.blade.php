<div style="background-color:#000; color:#fff; font-family:Arial, sans-serif; padding:30px; border-radius:10px;">
  <div style="text-align:center; font-size:28px; font-weight:bold; margin-bottom:30px;">
    <span style="color: #B9FF38;">EN</span><span style="color: #fff;">LIMONADO</span>
  </div>

  <h2 style="color:#B5F613; align-items: center;">Nuevo usuario inscrito</h2>

  <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
  <p><strong>Email:</strong> {{ $data['email'] }}</p>
  <p><strong>Teléfono:</strong> {{ $data['phone']  }}</p>
  <p><strong>Mensaje:</strong><br>{{ $data['message'] ?? 'No especificado'}}</p>

  <hr style="border-top: 1px solid #B5F613; margin: 30px 0;">

  <p style="font-size: 0.9rem;">Este mensaje fue enviado desde el formulario de inscripcion de <strong>Enlimonado</strong>.
  </p>
</div>
