/**content_type */
const contentsType = [
    { id: 1, label: "Contenedor" },
    { id: 2, label: "Contenido Simple" },
    { id: 3, label: "Enlaces" },
    { id: 4, label: "Documentos" },
];
/**content_columns */
const contentsColums = [
    { id: 1, label: "Full ", class: "w-full" },
    { id: 2, label: "Largo ", class: "w-10/12" },
    { id: 3, label: "Medio ", class: "w-1/2" },
    { id: 4, label: "Pequeño ", class: "w-1/3" },
    { id: 5, label: "Extra Pequeño 2", class: "w-1/4" },
];
/**content_columns_sons */
const contentsColumsSons = [
    { id: 1, label: "Sin división de columnas ", class: "grid-cols-none" },
    { id: 2, label: "División de 6 columnas ", class: "grid-cols-6" },
    { id: 3, label: "División de 4 columnas ", class: "grid-cols-4" },
    { id: 4, label: "División de 3 columnas ", class: "grid-cols-3" },
    { id: 5, label: "División de 2 columnas ", class: "grid-cols-2" },
];

const contentAlign = [
    { id: 1, label: "Izquierda" },
    { id: 2, label: "Centro" },
    { id: 3, label: "Derecha" },
];

const contentTitleSize = [
    { id: 1, label: "Título extra grande *9", class: "text-9xl" },
    { id: 2, label: "Título extra grande *8", class: "text-8xl" },
    { id: 3, label: "Título extra grande *7", class: "text-7xl" },
    { id: 4, label: "Título extra grande *6", class: "text-6xl" },
    { id: 5, label: "Título extra grande *5", class: "text-5xl" },
    { id: 6, label: "Título extra grande *4", class: "text-4xl" },
    { id: 7, label: "Título extra grande *3", class: "text-3xl" },
    { id: 8, label: "Título extra grande *2", class: "text-2xl" },
    { id: 9, label: "Título extra grande ", class: "text-xl" },
    { id: 10, label: "Título grande", class: "text-lg" },
    { id: 11, label: "Título Pequeño", class: "text-sm" },
    { id: 12, label: "Título extra Pequeño", class: "text-xs" },
];

export {
    contentsType,
    contentsColums,
    contentsColumsSons,
    contentAlign,
    contentTitleSize,
};
