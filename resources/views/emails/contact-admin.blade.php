<div style="background-color:#000; color:#fff; font-family:Arial, sans-serif; padding:30px; border-radius:10px;">
  <div style="text-align:center; font-size:28px; font-weight:bold; margin-bottom:30px;">
    <span style="color: #B9FF38;">EN</span><span style="color: #fff;">LIMONADO</span>
  </div>

  <h2 style="color:#B5F613; align-items: center;">Nuevo mensaje de contacto</h2>

  <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
  <p><strong>Email:</strong> {{ $data['email'] }}</p>
  <p><strong>Empresa:</strong> {{ $data['company'] ?? 'No especificada' }}</p>
  <p><strong>Teléfono:</strong> {{ $data['phone'] ?? 'No especificado' }}</p>
  <p><strong>Asunto:</strong> {{ $data['subject'] }}</p>
  <p><strong>Mensaje:</strong><br>{{ $data['message'] }}</p>

  <hr style="border-top: 1px solid #B5F613; margin: 30px 0;">

  <p style="font-size: 0.9rem;">Este mensaje fue enviado desde el formulario de contacto de <strong>Enlimonado</strong>.
  </p>
</div>
