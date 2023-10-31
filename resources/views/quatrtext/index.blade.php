@extends('dashboard')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @foreach ($quatrtexts as $quatrtext)
                {{--
                dd(count($quatrtexts))
                --}}
                    <div class="card">
                        <h3 class="card-header text-center">{{ $selectorder[$quatrtext->serial] }}</h3>
                        <div class="card-body">
                            <select name="version">
                                @foreach ($selectorder as $key => $val)
                                    <option value="{{ $key }}">
                                    {{ $val }}
                                    </option>

                                    @if (count($quatrtexts)==$key)
                                        @break
                                        @endif
                                @endforeach
                            </select>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="" id="textarea{{$quatrtext->serial}}" rows="4">{{ $quatrtext->quatrtext }}</textarea>
                                {{--<label for="floatingTextarea2">Comments</label>--}}
                            </div>
                        </div>
                    </div>
                @endforeach



                {{--fперебор quatrtexts--}}
                {{--<div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('quatrtext') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required
                                       autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>--}}

            </div>
        </div>
    </div>
</main>
@endsection
