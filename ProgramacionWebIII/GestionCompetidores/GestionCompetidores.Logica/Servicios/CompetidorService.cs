using GestionCompetidores.Entidades.EF;
using Microsoft.EntityFrameworkCore;

namespace GestionCompetidores.Logica.Servicios;

public interface ICompetidorService
{
    void crearCompetidor(Competidor competidor);
    List<Competidor> Listar();
    List<Competidor> ListarPorDeporte(int idDeporte);
    
}

public class CompetidorService : ICompetidorService
{
    private readonly Practica3Context _ctx;
    
    public CompetidorService(Practica3Context context)
    {
        _ctx = context;
    }
    

    public void crearCompetidor(Competidor competidor)
    {
        _ctx.Competidors.Add(competidor);
        _ctx.SaveChanges();
    }

    public List<Competidor> Listar()
    {
        return _ctx.Competidors.Include(c => c.IdDeporteNavigation).ToList();
    }

    public List<Competidor> ListarPorDeporte(int idDeporte)
    {
        return _ctx.Competidors.Include(c => c.IdDeporteNavigation).Where(c => c.IdDeporte == idDeporte)
            .ToList();
    }
}