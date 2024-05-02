<li class="nav-item dropdown" id="dropdownMenu">
    <a class="nav-link" href="#" id="navbarDropdown">
        <i class="fas fa-cog"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Manual do Usuário</a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sair do Sistema
            </a>
        </li>

    </ul>
</li>
<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        {{ Auth::user()->nome }}
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        var dropdownToggle = dropdownMenu.querySelector('.nav-link');

        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault();
            var dropdownMenu = this.nextElementSibling;
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function(event) {
            if (!dropdownMenu.contains(event.target)) {
                var dropdownMenus = document.querySelectorAll('.dropdown-menu');
                dropdownMenus.forEach(function(dropdownMenu) {
                    dropdownMenu.classList.remove('show');
                });
            }
        });
    });

</script>

