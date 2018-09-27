@extends('layouts.app')

@section('scripts')
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
@endsection

@section('content')
<body>
    <h1>Classic editor</h1>
    <form action="{{ route('dashboard.administrativo.receita.cadastrar') }}" method="POST">
        @csrf
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <p><input type="submit" value="Submit"></p>
    </form>



    <script>

    </script>
</body>
@endsection

