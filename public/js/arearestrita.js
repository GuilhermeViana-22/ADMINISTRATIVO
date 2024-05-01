
let modalWrap = null;

/**
 * Função para carregar uma página em janela modal
 * @param url
 * @param title
 * @param tamanho
 * @param id
 * @param callback
 */
function showModal(url, title, tamanho = 'modal-lg', id= null, callback = function () {}) {
    Swal.fire({
        title: 'Aguarde!', html: 'Abrindo janela...', didOpen: () => {
            Swal.showLoading();
        }
    });

    if (modalWrap !== null) {
        modalWrap.remove();
    }

    if (id == null) {
        id = radomString(10)
    }

    modalWrap = document.createElement('div');
    modalWrap.innerHTML = `
    <div class="modal fade" tabindex="-1" id="` + id + `" data-bs-backdrop="static">
        <div class="modal-dialog ` + tamanho + `">
            <div class="modal-content">
                <div class="modal-header bg-light">
                <h5 class="modal-title">${title}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" id="modal_corpo">
                <div class="text-center">

                    <div class="lds-dual-ring"></div>
                    <h4>Carregando, aguarde...</h4>
                </div>
                </div>
            </div>
        </div>
    </div>
  `;

    $("#modal_area").append(modalWrap);

    $("#modal_corpo").load(url, function (body, message, xhr) {
        if (xhr.status == 200) {
            let modal = new bootstrap.Modal(modalWrap.querySelector('.modal'));
            Swal.close();

            // modalWrap.querySelector('.modal').addEventListener('shown.bs.modal', function (event) {
            //     Swal.close();
            //     //console.log(4343);
            // })

            modal.show();

        } else {
            ajaxErro(xhr);
        }
    });
}

/**
 * Função para enviar um form HTML via ajax
 * @param form
 * @param callback
 * @param callbackOnError
 */
function formAjax(form, callback, callbackOnError = function(){}) {
    // Remove os erros de validação
    const invalidInputs = document.querySelectorAll(form + " .is-invalid");
    invalidInputs.forEach(input => {
        input.classList.remove('is-invalid');
    });

    // Obtém os dados do formulário
    const formData = new FormData(document.querySelector(form));

    // Verifica se há inputs inválidos
    const inputs = document.querySelectorAll(form + " .form-control");
    let hasInvalidInput = false;
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('is-invalid');
            hasInvalidInput = true;
        }
    });

    if (hasInvalidInput) {
        return; // Não envia o formulário se houver inputs inválidos
    }

    sendFormData(formData, document.querySelector(form).getAttribute('action'), callback, callbackOnError);
}

/**
 * Função para enviar um form data via ajax
 * @param formData
 * @param url
 * @param callback
 * @param callbackOnError
 */
function sendFormData(formData, url, callback = function () {}, callbackOnError = function () {}) {
    //Abre o loader
    Swal.fire({
        title: 'Aguarde!', html: 'Enviando...', didOpen: () => {
            Swal.showLoading();
        }
    });

    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        encode: true,
        success: function (data) {
            Swal.close();

            if (data.redirect) {
                window.location = data.redirect;
            } else if (data.alert) {
                Swal.fire(data.alert.titulo, data.alert.mensagem, data.alert.tipo).then(() => {
                    callback(data);
                });
            } else if (data.reload) {
                window.location.reload();
            }
        },
        error: function (data) {
            ajaxErro(data, callbackOnError);
        }
    });
}

/**
 * Função para trocar de página
 * @param url
 * @param target_blank
 */
function irPara(url, target_blank = false) {
    Swal.fire({
        title: 'Aguarde!',
        html: 'Abrindo...',
        timerProgressBar: false,
        didOpen: () => {
            Swal.showLoading()
        }
    });

    setTimeout(() => {
        Swal.close();

        if(target_blank !== false) {
            window.open( url, '_blank' );
        } else {
            window.location = url;
        }

    }, 500);
}

/**
 * Função para criação de URLs
 * @param action
 * @returns {string}
 */
function obterUrl(action = "") {
    return BASE_URL + action
}

/**
 * Tratamento e exibição de erros do ajax
 * @param data
 * @param callback
 */
function ajaxErro(data, callback = function(){}) {
    if (data.status === 0) {
        Swal.fire('Erro de rede', "Verifique sua conexão com a internet e tente novamente.", 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 400) {
        Swal.fire('Atenção!', data.responseText, 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 401) {
        Swal.fire('Não autorizado', data.responseText, 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 403) {
        Swal.fire('Acesso não permitido', 'Você não pode efetuar essa ação.', 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 404) {
        Swal.fire('Item não localizado', 'Este item não foi localizado.', 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 409) {
        Swal.fire('Conflito', data.responseText, 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 410) {
        Swal.fire('Sessão expirada', 'Sua sessão está expirada, faça login novamente para acessar o conteúdo.', 'error').then(() => {
            irPara(obterUrl())
        });
    } else if (data.status === 419) {
        Swal.fire('Página expirada', 'Essa página está expirada, atualize e tente novamente.', 'error').then((r) => r.value ? callback() : null)
    } else if (data.status === 422) {
        erroValidacao(JSON.parse(data.responseText), callback);
    } else if (data.status === 500) {
        Swal.fire('Erro interno', 'Ocorreu um erro interno ao processar sua solicitação, tente novamente mais tarde.', 'error').then((r) => r.value ? callback() : null)
    } else {
        Swal.fire('Erro [' + data.status + ']', data.responseText, 'error').then((r) => r.value ? callback() : null)
    }
}

/**
 * Função para exibição de erros de formulário
 * @param erros
 * @param callback
 */
function erroValidacao(erros, callback = function(){}) {
    $.each(erros.errors, function (index, value) {
        let nome = index;

        if (index.split(".").length > 1) {
            nome = index.split(".")[0] + "[" + index.split(".")[1] + "]";
        }

        const field = $("[name='" + nome + "']");

        if ($(".invalid-feedback[validation-target-name='" + nome + "']")) {
            $(".invalid-feedback[validation-target-name='" + nome + "']").html(value)
        }

        field.addClass('is-invalid');
    });

    Swal.fire('Alguns campos estão inválidos', 'Corrija os erros e tente novamente.', 'error').then((r) => r.value ? callback() : null)
}

/**
 * Função para criar uma string aleatória
 * @param length
 * @returns {string}
 */
function radomString(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
        counter += 1;
    }
    return result;
}
