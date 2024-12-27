const Ziggy = {"url":"http:\/\/localhost:2024","port":2024,"defaults":{},"routes":{"login":{"uri":"auth\/login","methods":["GET","HEAD"]},"auth.post-login":{"uri":"auth\/login","methods":["POST"]},"auth.register":{"uri":"auth\/signup","methods":["GET","HEAD"]},"auth.post-register":{"uri":"auth\/signup","methods":["POST"]},"auth.sign-out":{"uri":"auth\/signout","methods":["GET","HEAD"]},"auth.view":{"uri":"auth\/show\/{id}","methods":["POST"],"parameters":["id"]},"dash.index":{"uri":"dashboard","methods":["GET","HEAD"]},"user.index":{"uri":"users","methods":["GET","HEAD"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
