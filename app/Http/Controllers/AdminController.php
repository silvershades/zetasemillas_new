<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view("zeta_admin.index");
    }

//    PRODUCTOS START
    public function productos_index()
    {
        $girasoles = Product::where('tipo', 'GIRASOL')->get();
        $maices = Product::where('tipo', 'MAIZ')->get();
        $sorgos = Product::where('tipo', 'SORGO')->get();
        return view("zeta_admin.productos.index", compact("girasoles", "maices", "sorgos"));
    }

    public function productos_create_girasol()
    {
        return view("zeta_admin.productos.create_girasol");
    }

    public function productos_create_maiz()
    {
        return view("zeta_admin.productos.create_maiz");
    }

    public function productos_create_sorgo()
    {
        return view("zeta_admin.productos.create_sorgo");
    }

    public function productos_edit_girasol(Product $product)
    {
        return view("zeta_admin.productos.edit_girasol", compact("product"));
    }

    public function productos_edit_maiz(Product $product)
    {
        return view("zeta_admin.productos.edit_maiz", compact("product"));
    }

    public function productos_edit_sorgo(Product $product)
    {
        return view("zeta_admin.productos.edit_sorgo", compact("product"));
    }

    public function productos_store(Request $request)
    {
        $product = new Product();
        $product->nombre = request("nombre");
        $product->descripcion = request("descripcion");
        $product->tipo = request("tipo");
//            $product->img_path = request("img_path");
        $product->presentacion_semillas = request("presentacion_semillas");
        $product->presentacion_kg_bolsa = request("presentacion_kg_bolsa");
        $product->carac_gene_mercado = request("carac_gene_mercado");
        $product->carac_gene_tecnologia = request("carac_gene_tecnologia");
        $product->carac_gene_materia_grasa = request("carac_gene_materia_grasa");
        $product->carac_gene_potencial = request("carac_gene_potencial");
        $product->carac_gene_uso = request("carac_gene_uso");
        $product->carac_gene_estabilidad_rendimiento = request("carac_gene_estabilidad_rendimiento");
        $product->carac_gene_tipo = request("carac_gene_tipo");
        $product->carac_gene_ciclo = request("carac_gene_ciclo");
        $product->tenco_herbicida_tolerancia = request("tenco_herbicida_tolerancia");
        $product->tenco_control_insectos = request("tenco_control_insectos");
        $product->ciclo_dias_floracion = request("ciclo_dias_floracion");
        $product->ciclo_madurez_relativa = request("ciclo_madurez_relativa");
        $product->densidad_general_ha = request("densidad_general_ha");
        $product->densidad_cond_optimas = request("densidad_cond_optimas");
        $product->densidad_cond_no_optimas = request("densidad_cond_no_optimas");
        $product->carac_plantas_posicion_capitulo = request("carac_plantas_posicion_capitulo");
        $product->carac_plantas_altura = request("carac_plantas_altura");
        $product->carac_plantas_arquenio_color = request("carac_plantas_arquenio_color");
        $product->carac_plantas_tallo_tipo = request("carac_plantas_tallo_tipo");
        $product->carac_plantas_panoja = request("carac_plantas_panoja");
        $product->carac_plantas_grano_color = request("carac_plantas_grano_color");
        $product->carac_plantas_grano_textura = request("carac_plantas_grano_textura");
        $product->carac_plantas_taninos = request("carac_plantas_taninos");
        $product->carac_plantas_espiga = request("carac_plantas_espiga");
        $product->carac_plantas_espiga_altura_insercion = request("carac_plantas_espiga_altura_insercion");
        $product->carac_plantas_prolificidad = request("carac_plantas_prolificidad");
        $product->enfermedad_downy_mildew = request("enfermedad_downy_mildew");
        $product->enfermedad_verticillium = request("enfermedad_verticillium");
        $product->enfermedad_esclerotinia = request("enfermedad_esclerotinia");
        $product->enfermedad_phomopsis = request("enfermedad_phomopsis");
        $product->enfermedad_vuelco_quebrado = request("enfermedad_vuelco_quebrado");
        $product->enfermedad_mar_del_rio_iv = request("enfermedad_mar_del_rio_iv");
        $product->enfermedad_roya_comun = request("enfermedad_roya_comun");
        $product->enfermedad_sanidad_espiga = request("enfermedad_sanidad_espiga");
        $product->enfermedad_fortaleza_cana = request("enfermedad_fortaleza_cana");
        $product->enfermedad_stay_green = request("enfermedad_stay_green");
        $product->enfermedad_fusarium = request("enfermedad_fusarium");
        $product->enfermedad_panoja_hongos = request("enfermedad_panoja_hongos");
        $product->enfermedad_virus_mdmv = request("enfermedad_virus_mdmv");
        $product->enfermedad_pulgon_verde = request("enfermedad_pulgon_verde");
        $product->enfermedad_mosquita = request("enfermedad_mosquita");
        $product->recomendacion_pos = request("recomendacion_pos");

        $product->save();
        return redirect("zeta_admin/productos");
    }

    public function productos_update(Request $request)
    {
        $product_id = request('id');
        if ($product_id) {
            $product = Product::find($product_id);

            $product->nombre = request("nombre");
            $product->descripcion = request("descripcion");
            $product->tipo = request("tipo");
//            $product->img_path = request("img_path");
            $product->presentacion_semillas = request("presentacion_semillas");
            $product->presentacion_kg_bolsa = request("presentacion_kg_bolsa");
            $product->carac_gene_mercado = request("carac_gene_mercado");
            $product->carac_gene_tecnologia = request("carac_gene_tecnologia");
            $product->carac_gene_materia_grasa = request("carac_gene_materia_grasa");
            $product->carac_gene_potencial = request("carac_gene_potencial");
            $product->carac_gene_uso = request("carac_gene_uso");
            $product->carac_gene_estabilidad_rendimiento = request("carac_gene_estabilidad_rendimiento");
            $product->carac_gene_tipo = request("carac_gene_tipo");
            $product->carac_gene_ciclo = request("carac_gene_ciclo");
            $product->tenco_herbicida_tolerancia = request("tenco_herbicida_tolerancia");
            $product->tenco_control_insectos = request("tenco_control_insectos");
            $product->ciclo_dias_floracion = request("ciclo_dias_floracion");
            $product->ciclo_madurez_relativa = request("ciclo_madurez_relativa");
            $product->densidad_general_ha = request("densidad_general_ha");
            $product->densidad_cond_optimas = request("densidad_cond_optimas");
            $product->densidad_cond_no_optimas = request("densidad_cond_no_optimas");
            $product->carac_plantas_posicion_capitulo = request("carac_plantas_posicion_capitulo");
            $product->carac_plantas_altura = request("carac_plantas_altura");
            $product->carac_plantas_arquenio_color = request("carac_plantas_arquenio_color");
            $product->carac_plantas_tallo_tipo = request("carac_plantas_tallo_tipo");
            $product->carac_plantas_panoja = request("carac_plantas_panoja");
            $product->carac_plantas_grano_color = request("carac_plantas_grano_color");
            $product->carac_plantas_grano_textura = request("carac_plantas_grano_textura");
            $product->carac_plantas_taninos = request("carac_plantas_taninos");
            $product->carac_plantas_espiga = request("carac_plantas_espiga");
            $product->carac_plantas_espiga_altura_insercion = request("carac_plantas_espiga_altura_insercion");
            $product->carac_plantas_prolificidad = request("carac_plantas_prolificidad");
            $product->enfermedad_downy_mildew = request("enfermedad_downy_mildew");
            $product->enfermedad_verticillium = request("enfermedad_verticillium");
            $product->enfermedad_esclerotinia = request("enfermedad_esclerotinia");
            $product->enfermedad_phomopsis = request("enfermedad_phomopsis");
            $product->enfermedad_vuelco_quebrado = request("enfermedad_vuelco_quebrado");
            $product->enfermedad_mar_del_rio_iv = request("enfermedad_mar_del_rio_iv");
            $product->enfermedad_roya_comun = request("enfermedad_roya_comun");
            $product->enfermedad_sanidad_espiga = request("enfermedad_sanidad_espiga");
            $product->enfermedad_fortaleza_cana = request("enfermedad_fortaleza_cana");
            $product->enfermedad_stay_green = request("enfermedad_stay_green");
            $product->enfermedad_fusarium = request("enfermedad_fusarium");
            $product->enfermedad_panoja_hongos = request("enfermedad_panoja_hongos");
            $product->enfermedad_virus_mdmv = request("enfermedad_virus_mdmv");
            $product->enfermedad_pulgon_verde = request("enfermedad_pulgon_verde");
            $product->enfermedad_mosquita = request("enfermedad_mosquita");
            $product->recomendacion_pos = request("recomendacion_pos");

            $product->save();
            return redirect("zeta_admin/productos");

        } else {
            return redirect()->back();
        }

    }

    public function producto_activar(Product $product)
    {
        if ($product->active == 1) {
            $product->in_home = 0;
        }
        $product->active ? $product->active = 0 : $product->active = 1;
        $product->save();
        return redirect('zeta_admin/productos');
    }

    public function producto_relevante(Product $product)
    {
        $product->in_home ? $product->in_home = 0 : $product->in_home = 1;
        $product->save();
        return redirect('zeta_admin/productos');
    }

//    PRODUCTOS END


    public function novedades_index()
    {
        return view("zeta_admin.novedades.index");
    }

    public function textos_index()
    {
        $textos = DB::table('web_infos')->first();
        return view("zeta_admin.textos.index", compact("textos"));
    }

    public function store_texto_1()
    {
        $value = request("texto_1");
        DB::statement("UPDATE web_infos  SET texto_1 = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_texto_2()
    {
        $value = request("texto_2");
        DB::statement("UPDATE web_infos  SET texto_2 = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_texto_direccion()
    {
        $value = request("texto_direccion");
        DB::statement("UPDATE web_infos  SET texto_direccion = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_texto_telefonos()
    {
        $value = request("texto_telefonos");
        DB::statement("UPDATE web_infos  SET texto_telefonos = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_texto_telefonos_exterior()
    {
        $value = request("texto_telefonos_exterior");
        DB::statement("UPDATE web_infos  SET texto_telefonos_exterior = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_texto_mail1()
    {
        $value = request("texto_mail1");
        DB::statement("UPDATE web_infos  SET texto_mail1 = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_texto_mail2()
    {
        $value = request("texto_mail2");
        DB::statement("UPDATE web_infos  SET texto_mail2 = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_contacto_whatsapp()
    {
        $value = request("contacto_whatsapp");
        DB::statement("UPDATE web_infos  SET contacto_whatsapp = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function store_contacto_formulario()
    {
        $value = request("contacto_formulario");
        DB::statement("UPDATE web_infos  SET contacto_formulario = '$value'");
        return redirect("/zeta_admin/textos");
    }

    public function imagenes_index()
    {
        return view("zeta_admin.imagenes.index");
    }

    public function usuarios_index()
    {
        $users = User::all();
        return view("zeta_admin.usuarios.index", compact("users"));
    }

}
