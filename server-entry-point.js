import { app } from './src/Templates/app'

renderVueComponentToString(app, (err, res) => {
  if (err) return print(err)
  print(res)
})
