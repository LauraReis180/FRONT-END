import'./Alerta.css'

const Alerta = (props)=> {

 return (
    <>
    <div className="bg-red-100 m-3 p-3 rounded">
    {props.msg}
    </div>
    </>
  )
}

export default Alerta;
