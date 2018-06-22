<?php

namespace GestionFlotas\Http\Controllers;
use GestionFlotas\Usuario;
use Illuminate\Http\Request;
use GestionFlotas\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct(){
        $this ->middleware('auth');
    }
    public function index(Request $request)
    {
        $user = Usuario::searchforname($request->get('nomusu'))
        ->orderBy('users.id','asc')
        ->join('tb_tipos_roles', 'tb_tipos_roles.idrol', '=', 'users.idrol')
        ->join('tb_tipos_agencias', 'tb_tipos_agencias.idagencia', '=', 'users.idagencia')
        ->paginate(5);
         return view('users.users', compact('user')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        
        $user = new Usuario($request->all());
        $user->password = bcrypt($request['password']);
        $user->estado = 1;
        $user->save();
        return  redirect()->route('usuario.index')->with('mensajeuser','Se Registro correctamente un nuevo Usuario');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = DB::table('users')
         ->join('tb_tipos_agencias', 'users.idagencia', '=', 'tb_tipos_agencias.idagencia')
         ->join('tb_tipos_zonas', 'tb_tipos_agencias.idtipo_zona', '=', 'tb_tipos_zonas.idtipo_zona')
         ->where('id', $id)->first();
        return view('users.edit_user',compact('usuarios'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $passform = $request->password;
        $datosuserbd = Usuario::find($id);
        $passbd = $datosuserbd -> password;
        if($passbd !== $passform){
           $encr = bcrypt($request['password']);
        }else{
            $encr = $request['password'];
        }

      


       DB::table('users')->where('id', $id)->update([
            'name'          => $request['name'],
            'apellido'      => $request['apellido'],
            'email'         => $request['email'],
            'password'      => $encr,
            'telefono'      => $request['telefono'],
            'idrol'         => $request['idrol'],
            'idagencia'     => $request['idagencia'],
            'estado'        => 1,  
            'updated_at'    => Carbon::now(),
       ]);


        return  redirect()->route('usuario.index')->with('mensajeuser','Se actualizó con éxito el usuario ' .$request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::findOrFail($id)->delete();
        return  redirect()->route('usuario.index')->with('mensajeuser','Se Eliminó el Usuario');
    }
}
