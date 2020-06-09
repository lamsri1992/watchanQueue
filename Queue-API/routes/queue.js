// import lib
const express = require('express');
const db = require('../config/database');
// define variable
const sequelize = db.sequelize;
const Queue = db.queue;
const route = express.Router();
const { Op } = require('sequelize');

// get queue all
route.get('/', async (req, res, next) => {
  const queues = await Queue.findAll();
  res.json(queues);
});

// get by visit-id
route.get('/visit/:t_visit_id', async (req, res, next) => {
  Queue.findOne({
      where: {
        t_visit_id: req.params.t_visit_id
      },
      attributes: {exclude: ['id']}
    }).then(item => {
      res.json(item)
    }).catch(err => {
      console.log(err)
    })
  })

// get by servicepoint-id
route.get('/servicepoint/:b_service_point_id', async (req, res, next) => {
  Queue.findAll({
      where: {
        b_service_point_id: {
          [Op.eq]: req.params.b_service_point_id
        },
        visit_queue_map_queue: {
          [Op.ne]: '0'
        }
      },
      order: [
        ['assign_date_time', 'ASC'],
    ],
      attributes: {exclude: ['id']}
    }).then(item => {
      res.json(item)
    }).catch(err => {
      console.log(err)
    })
  })

module.exports = route;