
const renderProvinces = () => {
  let provinces = document.getElementById('provincias')
  let content = ''

  provincias.forEach(item => {
    content += `
      <option value='${item.id}'>${item.nombre}</option>
    `
  })
  provinces.innerHTML = content
}

const renderCantones = (provinciaId) => {
  let canton = document.getElementById('cantones')
  let content = ''

  cantones[provinciaId - 1].length > 0 ? cantones[provinciaId - 1].forEach(item => {
    content += `
      <option value='${item.id}'>${item.nombre}</option>
    `
  })
  : content += `
    <option value='0'>No se encontraron cantones</option>
  `
  canton.innerHTML = content
}

const renderDistrict = (cantonId) => {
  let district = document.getElementById('distritos')
  let content = ''

  distritos[cantonId - 1].length > 0 ? distritos[cantonId - 1].forEach(item => {
    content += `
      <option value='${item.id}'>${item.nombre}</option>
    `
  })
  : content += `
    <option value=''>No se encontraron distritos</option>
  `
  district.innerHTML = content
}


const resetSelect = () => {
  let canton = document.getElementById('cantones')
  let district = document.getElementById('distritos')

  canton.innerHTML = null
  district.innerHTML = null
}

/// selects

const provinciaSeleccionada = () => {
  let value = document.getElementById('provincias').value
  resetSelect()
  renderCantones(value)
}

const cantonSeleccionado = () => {
  let value = document.getElementById('cantones').value
  renderDistrict(value)
}

(() => {
  renderProvinces()
})()