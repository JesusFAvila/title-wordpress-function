// Esta función toma un array $title_parts como argumento, que contiene las diferentes partes del título de la página.
function custom_feed_title( $title_parts ) {
    // Verifica si la página actual es un feed. is_feed() es una función de WordPress que devuelve true si la página es un feed y false en caso contrario.
    if ( is_feed() ) {
        // Si la página es un feed, entonces cambia la parte 'title' del array $title_parts a "Tu título personalizado".
        // Esto modificará el título de la página.
        $title_parts['title'] = "Tu título personalizado";
    }
    // La función devuelve el array $title_parts, ya sea modificado o no.
    // Si la página no es un feed, $title_parts se devolverá tal cual se recibió.
    return $title_parts;
}
// Aquí estamos añadiendo un filtro a 'document_title_parts'. Esto significa que cuando WordPress genera las partes del título del documento, 
// se aplicará nuestra función custom_feed_title() a esos partes del título.
// '10' es la prioridad del filtro. Los filtros con prioridades más bajas se aplican primero. '1' es el número de argumentos que nuestra función acepta.
add_filter( 'document_title_parts', 'custom_feed_title', 10, 1 );
