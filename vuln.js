const path = require("path");

app.get("/", (req, res) => {
  path.join("/user/", req.params.path)

  var pathname = path.join("/public/", req.body.foo)
  path.resolve(pathname)

  path.resolve(__dirname, req.body.foo)
  path.resolve(__dirname, `${req.body.foo}`)
})
