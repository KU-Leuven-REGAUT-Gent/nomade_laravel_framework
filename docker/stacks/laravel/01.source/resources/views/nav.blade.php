<a class="navbar-brand" href="{{ secure_url('/') }}">
    {{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
        </li>

           <!-- Questionnaires, submissions -->
        @if ( auth()->check() && (auth()->user()->can('index', App\Questionnaire::Class ) || auth()->user()->can('index', App\Submission::Class)) )
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Questionnaire management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @can('index', App\Questionnaire::Class)
                    <a class="dropdown-item" href="{{ route('questionnaires.index') }}">{{ __('Questionnaires') }}</a>
                    @endcan

                    @can('index', App\Submission::Class)
                        <a class="dropdown-item" href="{{ route('submissions.index') }}">{{ __('Submissions') }}</a>
                    @endcan
                </div>
            </li>
        @endif
        

        @can('index', App\Measurement::Class)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('measurements.index') }}">{{ __('Measurements') }}</a>
        </li>
        @endcan

        @if ( auth()->check() && (auth()->user()->can('index', App\Setup::Class ) || auth()->user()->can('index', App\InstrumentType::Class)) )
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Setup management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @can('index', App\Setup::Class)
                        <a class="dropdown-item" href="{{ route('setups.index') }}">{{ __('Setups') }}</a>
                    @endcan
                    @can('index', App\InstrumentType::Class)
                        <a class="dropdown-item" href="{{ route('instrumentTypes.index') }}">{{ __('Instrument Types') }}</a>
                    @endcan
                    @can('index', App\Parameter::Class)
                        <a class="dropdown-item" href="{{ route('parameters.index') }}">{{ __('Parameters') }}</a>
                    @endcan
                </div>
            </li>
        @endif

        @if ( auth()->check() && (auth()->user()->can('index', App\User::Class ) || auth()->user()->can('index', App\Company::Class)) )
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                    @can('index', App\User::Class)
                        <a class="dropdown-item" href="{{ route('users.index') }}">{{ __('Users') }}</a>
                    @endcan
                    @can('index', App\Company::Class)
                        <a class="dropdown-item" href="{{ route('companies.index') }}">{{ __('Companies') }}</a>
                    @endcan
                    @can('index', App\Role::Class)
                    <a class="dropdown-item" href="{{ route('roles.index') }}">{{ __('Roles') }}</a>       
                    @endcan   
                    <a class="dropdown-item" href="{{ route('permissions.index') }}">{{ __('Permissions') }}</a>          
                </div>
            </li>
        @endif

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Documentation
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://documentation.clouddb.myriade.be/newman/">API Documentation (Newman)</a>
                <a class="dropdown-item" href="http://documentation.clouddb.myriade.be/phpdoc/">PHP Documentation (phpDocumentor)</a>
                @can('index', App\ApiLog::Class)
                    <a class="dropdown-item" href="{{ route('apiLogs.index') }}">{{ __('API Logs') }}</a>
                @endcan
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
        </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>