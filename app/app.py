#!/usr/bin/env python

from flask import Flask
from flask_restful import Resource, Api


app = Flask(__name__)

api_ = Api(app)


class Environment(Resource):
    def get(self):
        return {
            'environments': [
                    'prod',
                    'stg',
                    'int'
                    ]
    }


api_.add_resource(Environment, '/')


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
