module.exports = (sequelize, Sequelize) => {
    const getQueue = sequelize.define(
      't_visit_queue_transfer',
      {
        t_visit_id: {
          type: Sequelize.STRING,
          field: 't_visit_id',
          primaryKey: true
        },
        visit_hn: {
          type: Sequelize.STRING,
          field: 'visit_hn'
        },
        patient_firstname: {
          type: Sequelize.STRING,
          field: 'patient_firstname'
        },
        patient_lastname: {
          type: Sequelize.STRING,
          field: 'patient_lastname'
        },
        assign_date_time: {
          type: Sequelize.STRING,
          field: 'assign_date_time'
        },
        visit_queue_setup_description: {
          type: Sequelize.STRING,
          field: 'visit_queue_setup_description'
        },
        visit_queue_map_queue: {
          type: Sequelize.STRING,
          field: 'visit_queue_map_queue'
        },
        b_service_point_id: {
          type: Sequelize.STRING,
          field: 'b_service_point_id'
        },
        service_point_description: {
          type: Sequelize.STRING,
          field: 'service_point_description'
        },
        visit_queue_transfer_lab_status: {
          type: Sequelize.STRING,
          field: 'visit_queue_transfer_lab_status'
        }
      },
      {
        timestamps: false,
        freezeTableName: true
      }
    );
    return getQueue;
  };