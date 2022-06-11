
<div class="container d-flex  align-items-center flex-column p-5">
    <h1>Login  com API GOOGLE</h1>
    <p>Aqui você ira utilizar sua conta google para fazer login!</p>

<script src="https://accounts.google.com/gsi/client" async defer></script>
    <div id="g_id_onload"
         data-client_id=" //INSERIR API KEY AQUI"
         data-login_uri="//INSERIR URL QUE VOCÊ CADASTROU NO GOOGLE API AQUI !"
         data-auto_prompt="false">
     </div>
      <div class="g_id_signin"
         data-type="standard"
         data-size="large"
         data-theme="outline"
         data-text="sign_in_with"
         data-shape="rectangular"
         data-logo_alignment="left">
      </div>
</div>


