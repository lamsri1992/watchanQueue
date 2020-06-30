<?php

Class ER

{
    public function getQueueER($pdo,$hos)
    {
        $query = "SELECT *
                  FROM t_visit_queue_transfer
                  LEFT JOIN t_visit ON t_visit.t_visit_id = t_visit_queue_transfer.t_visit_id
                  LEFT JOIN t_patient ON t_patient.t_patient_id = t_visit_queue_transfer.t_patient_id
                  LEFT JOIN b_service_point ON b_service_point.b_service_point_id = t_visit_queue_transfer.b_service_point_id
                  LEFT JOIN f_emergency_status ON f_emergency_status.f_emergency_status_id = t_visit.f_emergency_status_id
                  WHERE t_visit_queue_transfer.b_service_point_id = '{$hos}'
                  AND t_visit.f_visit_status_id = '1'
                  AND t_visit_queue_transfer.f_visit_type_id = '0'
                  AND t_visit_queue_transfer.visit_queue_map_queue <> '0'
                  ORDER BY t_visit_queue_transfer.assign_date_time ASC";
        $stmt = $pdo->query($query);
        $obj = array();
            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $obj[] = $data;
        }
        return $obj;
    }
}

?>