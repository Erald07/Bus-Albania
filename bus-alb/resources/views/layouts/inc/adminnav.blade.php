<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="px-6 justify-between flex w-full items-center">
        <div class="">
            <a class="navbar bg-transparent text-white text-xl" href="javascript:void(0)">Dashboard</a>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle justify-end text-right text-xl text-white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                {{-- <button class="dropdown-item" type="button"></button> --}}
                <a class="dropdown-item text-lg" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
