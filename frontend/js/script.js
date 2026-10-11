$(document).ready(function () {

    $("form").submit(function (event) {

        event.preventDefault();

        let valorBusca = $(".input").val();

        if (valorBusca.trim() === "") {
            $(".result").html(`
                <p>Digite o nome, símbolo ou número atômico do elemento.</p>
            `);
            return;
        }

        $.ajax({
            url: "http://localhost:8000/backend/Controller/ElementController.php",
            type: "POST",

            data: {
                input: valorBusca
            },

            dataType: "json",

            success: function (data) {

                if (data.success === true) {

                    $(".result").html(`
                        <div class="card element-card shadow">

                            <div class="card-body">

                                <div class="text-center">

                                    <h1 class="symbol">
                                        ${data.symbol}
                                    </h1>

                                    <h3 class="card-title">
                                        ${data.name}
                                    </h3>

                                    <p class="text-muted">
                                        Número atômico: ${data.atomicNumber}
                                    </p>

                                </div>

                                <hr>

                                <div class="row">

                                    <div class="col-6 mb-3">
                                        <strong>Massa atômica</strong>
                                        <p class="mb-0">
                                            ${data.atomicMass}g/mol
                                        </p>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <strong>Grupo</strong>
                                        <p class="mb-0">
                                            ${data.group}
                                        </p>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <strong>Período</strong>
                                        <p class="mb-0">
                                            ${data.period}
                                        </p>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <strong>Bloco</strong>
                                        <p class="mb-0">
                                            ${data.block}
                                        </p>
                                    </div>

                                </div>

                                <hr>

                                <strong>Configuração eletrônica</strong>

                                <p class="electron-config mt-2 mb-0">
                                    ${data.electronConfig}
                                </p>

                            </div>

                        </div>
                    `);

                } else {

                    $(".result").html(`
                        <p>Elemento não encontrado.</p>
                    `);

                }

            },

            error: function (xhr, status, error) {

                console.log("Erro:", error);
                console.log("Status:", status);
                console.log("Resposta:", xhr.responseText);

                $(".result").html(`
                    <p>Erro ao consultar o servidor.</p>
                `);

            }

        });

    });

});