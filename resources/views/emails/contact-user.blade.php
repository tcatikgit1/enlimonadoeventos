<div style="background-color:#0a0a0a; color:#fff; font-family:Arial, sans-serif; padding:30px; border-radius:10px;">
  <div style="text-align:center; font-size:28px; font-weight:bold; margin-bottom:30px;">
<img src="{{ $message->embed(public_path('assets/img/enlimonado/logo/Log2.webp')) }}" alt="Logo Enlimonado"
  style="height: auto; width: 180px;">
  </div>

  <h2 style="color:#B5F613; text-align:center;">¡Gracias por contactarnos, {{ $data['name'] }}!</h2>

  <p style="text-align:center">Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.</p>

  <hr style="border-top: 1px solid #444; margin: 30px 0;">

  <p><strong style="color:#B5F613;">Resumen de tu mensaje:</strong></p>
  <ul style="padding-left: 20px;">
    <li><strong>Asunto:</strong> {{ $data['subject'] }}</li>
    <li><strong>Mensaje:</strong> {{ $data['message'] }}</li>
  </ul>

  <p style="margin-top: 30px;">Atentamente,<br><span style="color:#B5F613;">El equipo de Enlimonado Eventos</span></p>
</div>
