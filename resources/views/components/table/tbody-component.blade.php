<tbody>
    @foreach ($datas as $data)
        <x-table.row-component :data=$data/>
    @endforeach
</tbody>
