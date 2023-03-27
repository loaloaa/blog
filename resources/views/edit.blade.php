<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    Task name:
                </td>
                <td>
                    <input type='text' name="taskName" value=''>
                </td>

                <td>

                        @csrf
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-btn fa-info"></i>update
                        </button>

                </td>
                <td>
                    {{$id}}
                    </td>
            </tr>

        </table>
    </form>

</body>
</html>
