<x-layout title="URL Shortener">
    <form action="/shortener/" method="post">
        @csrf
        <label>URL</label>
        <input type="url" class="form-control" name="url" id="url" />
        <button type="submit" class="btn btn-primary">Submit!</button>
    </form>
    @if (!empty($id))
    <label>ShortURL:</label>
    <a href="http://localhost/shortener/{{$id}}" target="_blank">http://localhost/shortener/{{$id}}</a>
    @endif
</x-layout>
