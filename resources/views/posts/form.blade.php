
    <!-- GET Form -->
    <form method="GET" action="{{ url('/posts') }}">
        <input type="text" name="get_input" placeholder="GET uchun input">
        <button type="submit">GET Yuborish</button>
    </form>

    <!-- POST Form -->
    <form method="POST" action="{{ url('/posts/create') }}">
        @csrf
        <input type="text" name="post_input" placeholder="POST uchun input">
        <button type="submit">POST Yuborish</button>
    </form>

    <!-- DELETE Form -->
    <form method="POST" action="{{ url('/posts/delete') }}">
        @csrf
        @method('DELETE')
        <input type="text" name="delete_input" placeholder="DELETE uchun input">
        <button type="submit">DELETE Yuborish</button>
    </form>

   <!-- //PATCH Form -->
    <form method="POST" action="{{ url('/posts/edit') }}">
        @csrf
        @method('PATCH')
        <input type="text" name="patch_input" placeholder="PATCH uchun input">
        <button type="submit">PATCH Yuborish</button>
    </form>

    <!-- //PUT Form -->
    <form method="POST" action="{{ url('/posts/pu/edit') }}">
        @csrf
        @method('PUT')
        <input type="text" name="put_input" placeholder="PUT uchun input">
        <button type="submit">PUT Yuborish</button>
    </form>



