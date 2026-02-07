# Railway Deployment Guide

## Quick Setup

1. **Create Railway account**: https://railway.app
2. **Sign in with GitHub**
3. **Create new project** → Select "Deploy from GitHub"
4. **Select repository**: `PTTZSURV/nyoteka`
5. **Railway will auto-detect** the PHP application

## Environment Variables

After creating the project, add these environment variables in Railway:

- `DB_HOST` - Your database host
- `DB_USER` - Your database username
- `DB_PASSWORD` - Your database password
- `DB_NAME` - Your database name

## Deployment Steps

1. Go to https://railway.app
2. Click "New Project"
3. Select "Deploy from GitHub repo"
4. Search for and select `PTTZSURV/nyoteka`
5. Wait for build to complete
6. Add environment variables:
   - Go to Variables tab
   - Click "Add Variable"
   - Enter: `DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_NAME`
7. Your app will be live on a Railway domain

## Custom Domain

Once deployed:
1. Go to Settings
2. Click "Add Domain"
3. Use your own domain or Railway's subdomain

## Database

If you need a MySQL database on Railway:
1. Click "Add Service"
2. Select "MySQL"
3. Railway will provide connection details
4. Copy those details to your environment variables

## File Structure

- `Procfile` - Tells Railway how to run the app
- `composer.json` - PHP dependencies
- `railway.json` - Railway configuration
- `.env.example` - Example environment variables
- `.env` - Local environment variables (never commit)

## Troubleshooting

If deployment fails:
1. Check build logs in Railway dashboard
2. Ensure `.env` variables are set correctly
3. Check that your PHP code is synced from GitHub

For help: https://docs.railway.app
