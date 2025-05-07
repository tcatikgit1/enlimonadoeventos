<div style="background-color:#ffffff; color:#000000; font-family:Arial, sans-serif; padding:30px; border-radius:10px;">
  <div style="text-align:center; font-size:28px; font-weight:bold; margin-bottom:30px;">
<img src="{{ $message->embed(public_path('assets/img/enlimonado/logo/Logcorreo.png')) }}" alt="Logo Enlimonado"
  style=" height: auto; width: 180px;">
  </div>

  <h2 style="color:#000000; text-align:center;">¡Gracias por contactarnos, {{ $data['name'] }}!</h2>

  <p class=""style="text-align:center; color: #000;">Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.</p>

  <hr style="border-top: 1px solid #444; margin: 30px 0;">

  <p><strong style="color:#000000;">Resumen de tu mensaje:</strong></p>
  <ul style="padding-left: 20px;">
    <li><strong>Asunto:</strong> {{ $data['subject'] }}</li>
    <li><strong>Mensaje:</strong> {{ $data['message'] }}</li>
  </ul>

  <p class="" style="margin-top: 30px; color: #000;">Atentamente,<br><span style="color:#000000;">El equipo de Enlimonado Eventos</span></p>
</div>
