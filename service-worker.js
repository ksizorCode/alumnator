// Definir el nombre del caché
const CACHE_NAME = "alumnator-cache-v1";

// Archivos a almacenar en la caché
const FILES_TO_CACHE = ["/", "/index.html", "/style.css"];

// Instalación del service worker
self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      // Añadir archivos a la caché
      console.log("Service Worker: Archivos cacheados");
      return cache.addAll(FILES_TO_CACHE);
    })
  );
});

// Activación del service worker
self.addEventListener("activate", (event) => {
  const cacheWhitelist = [CACHE_NAME];

  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (!cacheWhitelist.includes(cacheName)) {
            // Eliminar cachés antiguos
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Fetch: Servir archivos desde la caché cuando no haya conexión
self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((cachedResponse) => {
      // Si el archivo está en la caché, servirlo
      if (cachedResponse) {
        return cachedResponse;
      }

      // Si no está en la caché, obtenerlo de la red
      return fetch(event.request);
    })
  );
});
