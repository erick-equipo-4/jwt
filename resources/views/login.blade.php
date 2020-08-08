<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/form.min.js"
        integrity="sha512-VM6WNFlVLFwKXphssthAXJpG3cKWUK3G4edfsydLITA4iSeZmvJ+2gKBrR6qYkt/3A/I8hDHnAuIBz7xtfVtOg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.js"
        integrity="sha512-MCuLP92THkMwq8xkT2cQg5YpF30l3qzJuBRf/KsbQP1czFkRYkr2dSkCHmdJETqVmvIq5Y4AOVE//Su+cH+8QA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
        integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
        crossorigin="anonymous" />
    <style type="text/css">
    body {
        background-color: #DADADA;
    }

    body>.grid {
        height: 100%;
    }

    .image {
        margin-top: -100px;
    }

    .column {
        max-width: 450px;
    }
    </style>

    <script>
    $(document)
        .ready(function() {
            $('.ui.form')
                .form({
                    fields: {
                        email: {
                            identifier: 'email',
                            rules: [{
                                    type: 'empty',
                                    prompt: 'Ingresa un e-mail'
                                },
                                {
                                    type: 'email',
                                    prompt: 'Ingresa un e-mail válido'
                                }
                            ]
                        },
                        password: {
                            identifier: 'password',
                            rules: [{
                                    type: 'empty',
                                    prompt: 'Ingresa una contraseña'
                                },
                                {
                                    type: 'length[6]',
                                    prompt: 'La contraseña debe tener al menos 6 letras'
                                }
                            ]
                        }
                    }
                });
        });
    </script>
</head>

<body>

    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
                <img src="https://semantic-ui.com/images/logo.png" class="image">
                <div class="content">
                    Inicia sesión
                </div>
            </h2>
            <form class="ui large form">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="hola@gmail.com">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Ingrese su contraseña">
                        </div>
                    </div>
                    <div class="ui fluid large teal submit button">Ingresar</div>
                </div>

                <div class="ui error message"></div>

            </form>

            <div class="ui message">
                Eres nuevo?<a href="/registro">Registrate aquí</a>
            </div>
        </div>
    </div>

</body>

</html>