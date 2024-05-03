{{-- novidades  --}}
<section class="novidades missao" data-anime="right" id="Novidades">
    <img class="section-image animate__animated animate__jello" src="{{ asset('arquivos/imagens/logo.png') }}" alt="clevarxm">
    @if(session('success'))
        <script>
            Swal.fire('Sucesso', '{{ session('success') }}', 'success');
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire('E-mail não foi enviado', 'Desculpe mas houve um erro ao enviar email', 'error');
        </script>
    @endif
    <div class="newsletter"  style="padding: 30px">
        <br>
        <h2 class="newsletter">Newsletter</h2>
        <p class="small">Não perca as novidades! Assine nossa newsletter para receber conteúdos exclusivos, dicas de
            aprendizado e atualizações sobre nossos cursos de inglês diretamente na sua caixa de entrada.
            Mantenha-se informado e motivado em sua jornada de aprendizado. Inscreva-se agora mesmo!</p>

        <form  action="{{ url('/formulario') }}" id="form_newsletter" method="POST">
            @csrf <!-- Adiciona o token CSRF para proteção contra CSRF -->
            <div class="form-group">
                <label for="email"></label><input style="max-width: 60%; display: block; margin-left: auto; margin-right: auto" type="email" class="form-control" id="email" name="email"  placeholder="Digite seu e-mail" required >
            </div>
            <button  class="btn btn-danger enviar"  onclick="formAjax('#form_newsletter')"> <i class="fas fa-paper-plane"></i> Enviar</button>
        </form>
    </div>
</section>
