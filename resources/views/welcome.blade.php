<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">

            {{-- User Add Form --}}
            <form method="POST" action="{{ route('store-user') }}" class="col-md-6">
                @csrf
                <x-form-heading label='Add User' for='user_form' /><br>
                <div class="col-span-4">
                    <x-form-elements.input name='name' id='name' type='text' data-id="name-1"/>
                </div>
                <div class="col-span-4">
                    <x-form-elements.input name='email' id='email' type='email' />
                </div>
                <div class="col-span-4">
                    <x-form-elements.input name='phone' id='phone' type='number' />
                </div>
                <div class="grid grid-cols-12 gap-1">
                    <div class="col-span-6">
                    </div>
                    <div class="col-span-6">
                        <x-form-elements.submit-button id="submit-button" type='submit' />
                    </div>
                </div>
            </form>
        </div>
        <?php
            $headings = [
                'Name', 'Email', 'Phone'
            ];
        ?>
        <div class="container mt-4">
            <x-form-heading label='Users Table' for='user_table' /><br>
            <x-table.index :datas=$users id="users_table" :headings=$headings/>
        </div>
        <div class="container mt-4 row">
            <x-form-heading label='Users Cards' for='user_card' /><br>
            <x-card.index :datas=$users id="users_card"/>

        </div>
    </body>
</html>
