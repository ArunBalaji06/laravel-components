<tr>
    @foreach ($headings as $heading)
        <x-table.thead-cell :headings=$heading/>
    @endforeach
</tr>
