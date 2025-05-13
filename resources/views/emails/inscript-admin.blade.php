<div style="background-color:#ffffff; color:#000000; font-family:Arial, sans-serif; padding:30px; border-radius:10px;">
  <div style="text-align:center; font-size:28px; font-weight:bold; margin-bottom:30px;">
<img src="{{ $message->embed(public_path('assets/img/enlimonado/logo/LogoCorreo.png')) }}" alt="Logo Enlimonado"
width="240" style="max-width:100%; height:auto;">
  </div>

  <h2 style="color:#000000; align-items: center;">Nuevo usuario inscrito</h2>

  <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
  <p><strong>Email:</strong> {{ $data['email'] }}</p>
  <p><strong>Teléfono:</strong> {{ $data['phone']  }}</p>
  <p><strong>Mensaje:</strong><br>{{ $data['message'] ?? 'No especificado'}}</p>

  <hr style="border-top: 1px solid #000000; margin: 30px 0;">

  <p  class="" style="font-size: 0.9rem; color:#000000;">Este mensaje fue enviado desde el formulario de inscripcion de <strong>Enlimonado</strong>.
  </p>
</div>
