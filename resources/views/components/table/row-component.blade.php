
<tr>
    @foreach ($data as $value)
        <x-table.cell-component :value=$value/>
    @endforeach
</tr>
