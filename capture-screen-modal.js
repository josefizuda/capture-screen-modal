jQuery(document).ready(function($) {
    $('#openModalButton').on('click', function() {
        // Captura a tela usando html2canvas
        html2canvas(document.body).then(function(canvas) {
            // Converte o canvas para uma imagem PNG codificada em base64
            var imageData = canvas.toDataURL('image/png');

            // Exibe a imagem capturada no modal
            $('#capturedImage').attr('src', imageData);

            // Abre o modal
            $('#imageModal').modal('show');
        });
    });
});
