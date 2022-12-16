<?php 
require_once "./CC/conex.php";
    class Crud extends Conexion{
        //////////crud pet////////////////
        public function mostrarDatosPet()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PET;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoPet($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PET;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosPet($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PET;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminarPet($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PET;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizarPet($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PET;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        /////////////////crud PyC///////////////////////
        public function mostrarDatosPyC()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PAPEL;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoPyC($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PAPEL;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosPyC($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PAPEL;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function eliminarPyC($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PAPEL;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function actualizarPyC($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->PAPEL;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        //////////////////crud Al//////////////////////
        public function mostrarDatosAl()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ALUMINIO;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoAl($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ALUMINIO;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosAl($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ALUMINIO;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function eliminarAl($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ALUMINIO;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function actualizarAl($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ALUMINIO;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        ////////////////////crud Met////////////////////
        public function mostrarDatosMet()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->METAL;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoMet($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->METAL;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosMet($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->METAL;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function eliminarMet($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->METAL;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function actualizarMet($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->METAL;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        /////////////////crud Vi///////////////////////
        public function mostrarDatosVi()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->VIDRIO;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoVi($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->VIDRIO;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosVi($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->VIDRIO;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function eliminarVi($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->VIDRIO;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function actualizarVi($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->VIDRIO;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        //////////////////crud RP//////////////////////
        public function mostrarDatosRP()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->DAN;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoRP($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->DAN;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosRP($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->DAN;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function eliminarRP($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->DAN;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function actualizarRP($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->DAN;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        ////////////////crud Org////////////////////////
        public function mostrarDatosOrg()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ORG;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoOrg($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ORG;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosOrg($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ORG;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminarOrg($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ORG;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizarOrg($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->ORG;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        //////////////////crud OR//////////////////////
        public function mostrarDatosOR()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->OTRO;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumentoOR($id) 
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->OTRO;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function insertarDatosOR($datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->OTRO;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminarOR($id) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->OTRO;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizarOR($id, $datos) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->OTRO;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        ////////////////////////////////////////
    }

?>
