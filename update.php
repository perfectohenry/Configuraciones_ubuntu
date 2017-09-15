public function updatehoraextra(Request $request,$id)
{
    if ($request->ajax()) {
        $hextra=He::find($id);
        $hextra->document_id=$request->document_id;
        $hextra->doc_number=$request->doc_number;

        if ($request->f_e) {
            $fe=explode("/", $request->f_e);
            $hextra->f_e=$fe[2].'-'.$fe[1].'-'.$fe[0];
        }
        if ($request->f_r) {
            $fr=explode("/", $request->f_e);
            $hextra->f_r=$fr[2].'-'.$fr[1].'-'.$fr[0];
        }
        $hextra->pro=$request->pro;
        $hextra->mot=$request->mot;
        $hextra->obs=$request->obs;
        $hextra->save();
        return $hextra;
    }
}