<?php
/*
Plugin Name: Captura de Tela com Modal
Plugin URI: https://seusite.com
Description: Plugin para capturar a tela e exibir em um modal.
Version: 1.0
Author: Seu Nome
Author URI: https://seusite.com
License: GPLv2 or later
*/

// Adiciona os scripts necessários
function add_capture_screen_modal_scripts() {
    // Adiciona o script HTML2Canvas
    wp_enqueue_script('html2canvas', 'https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js', array(), '0.4.1', true);

    // Adiciona o script personalizado para captura e modal
    wp_enqueue_script('capture-screen-modal-script', plugin_dir_url(__FILE__) . 'capture-screen-modal.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_capture_screen_modal_scripts');

// Adiciona o modal HTML ao rodapé da página
function add_capture_screen_modal_html() {
    ?>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel">Imagem Capturada</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img id="capturedImage" class="img-fluid" alt="Imagem Capturada">
          </div>
        </div>
      </div>
    </div>
    <?php
}
add_action('wp_footer', 'add_capture_screen_modal_html');
