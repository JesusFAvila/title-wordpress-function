// Definición de la función personalizada.
function custom_page_title( $title_parts ) {
    // Verifica si la página actual es "/pagina-ejemplo/" usando la función is_page().
    // is_page() es una función de WordPress que devuelve true si estás en la página especificada y false en caso contrario.
    if ( is_page('pagina-ejemplo') ) {
        // Si estás en "/pagina-ejemplo/", cambia la parte 'title' del array $title_parts a "Tu título personalizado".
        $title_parts['title'] = "Tu título personalizado";
    }
    // La función devuelve el array $title_parts, modificado o no.
    return $title_parts;
}
// Añade un filtro a 'document_title_parts'. Cuando WordPress genera las partes del título del documento, 
// se aplicará la función custom_page_title() a esas partes.
add_filter( 'document_title_parts', 'custom_page_title', 10, 1 );
