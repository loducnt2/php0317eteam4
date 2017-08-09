<table border="1px" style="border-collapse: collapse" width="30%">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Status</td>
    </tr>
    @foreach($categories as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->status }}</td>
        </tr>
    @endforeach
</table>