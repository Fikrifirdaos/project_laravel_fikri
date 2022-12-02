@extends('layout')

@section('controller')
<div id="dash">
    <div class="wrapper bg-white shadow p-3 mb-5 bg-body rounded" >
        @if (session('notAllowed'))
        <div class="alert alert-danger">
        {{ session('notAllowed') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    {{ csrf_field() }}
    {{-- Mengambil dan mengirim data input ke controller yang nantinya diambil oleh Request $request --}}
    @csrf
        <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
                <div class="h5">My Todo's</div>
                <p class="text-muted text-justify">
                    Here's a list of activities you have to do
                </p>
                <br>
                <span>
                    <a href="/create" class="text-success">Create</a>  <a href="">Complated</a>
                </span>
            </div>
            <div class="info btn ml-md-4 ml-0">
                <span class="fas fa-info" title="Info"></span>
            </div>
        </div>
        <div class="work border-bottom pt-3">
            <div class="d-flex align-items-center py-2 mt-1">
                <div>
                    <span class="text-muted fas fa-comment btn"></span>
                </div>
                <div class="text-muted">{{$todo->count()}} todos</div>
                <button class="ml-auto btn bg-white text-muted fas fa-angle-down" type="button" data-toggle="collapse"
                data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
            </div>
        </div>
        <div id="comments" class="mt-1">
            {{-- looping data-data compact 'todo' agar dapat ditampilkan per baris datanya --}}
            @foreach ($todo as $item)
            <div class="comment d-flex align-items-start mt-2" >
                <div class="mr-2">
                    <label class="option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="d-flex flex-column ">
                    {{--path yang {id} dikirim data dinamis (data dari db) makanya disitu pake {{}}--}}
                    <a href="/edit/ {{$item->id}}"  class="text-justify">
                        {{-- menampilkan data dinamis / data yang diambil dari db pada blade harus menggunakan {{}} --}}
                        {{$item->title}}
                    </a>
                    </b>
                    <p class="text-muted">{{$item->description}}</p>
                    {{-- konsep ternary : if column status baris ini isinya 1 bakal munculin text 'Complated' selain dari itu akan menampilkan 'On-Proses'--}}
                    <p class="text-muted">
                        {{-- {{$item->status == 1 ? 'Complated' : 'On-proses'}} --}}
                        {{-- Carbon itu package laravel untuk mengelola yang berhubungan dengan date. Tdainya value column date di db kan bentuknya format 2022-11-22 nah kita pengen ubah bentuk formatnyanya jadi 22-11-22--}}
                        <span class="date">{{\Carbon\Carbon::parse($item->date)->format('j F, Y')}}</span>
                    </p>
                </div>
                <form action=" {{route('delete',$item->id)}}" method="POST" style="margin-left: 250px">
                    @method('delete')
                    @csrf
                    <button type="submit" class="fas fa-trash text-danger btn"></button>
                </form>
            </div>
        @endforeach
        <a class="bi btn btn-primary mt-4" href="/home">Back</a>
    </div>

</div>
@endsection
