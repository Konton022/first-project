<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of offers</title>
</head>
<body>
    <table>
        <thead>
            <th>id</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>address</th>
            <th>install_price</th>
            <th>monthly_price</th>
            <th>type_lm</th>
            <th>lmcheckup</th>
            <th>provider_id</th>
        </thead>
        <tbody>
        @foreach ($offers as $offer)
            <td>$offer->id</td>
            <td>$offer->created_at</td>
            <td>$offer->updated_at</td>
            <td>$offer->address</td>
            <td>$offer->install_price</td>
            <td>$offer->monthly_price</td>
            <td>$offer->type_lm</td>
            <td>$offer->lmcheckup</td>
            <td>$offer->provider_id</td>
        @endforeach
        </tbody>

    </table>
</body>
</html>