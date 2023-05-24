<x-layout title="ToDo">
    <form action="/todo/new" method="post">
        @csrf
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name" />
        <button type="submit">Submit!</button>
    </form>
    @foreach ($items as $item)
    <form action="/todo/{{$item->id}}/update" method="post">
        @csrf
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$item->name}}" />
        <label>Done</label>
        <input type="checkbox" class="form-control" name="done" id="done" @if ($item->done) checked @endif />
        <button type="submit">Submit!</button>
    </form>
    @endforeach
</x-layout>
